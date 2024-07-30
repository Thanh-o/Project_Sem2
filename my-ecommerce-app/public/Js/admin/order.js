document.addEventListener('DOMContentLoaded', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const ordersBody = document.getElementById('orders-body');
    const paginationControls = document.getElementById('pagination-controls');

    function loadOrders(page = 1) {
        fetch(`/orders?page=${page}`, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            updateOrdersTable(data.data);
            updatePaginationControls(data);
        })
        .catch(error => {
            console.error('Error fetching orders:', error);
        });
    }

    function updateOrdersTable(orders) {
        ordersBody.innerHTML = '';
        orders.forEach(order => {
            ordersBody.insertAdjacentHTML('beforeend', `
                <tr>
                    <th scope="row">${order.id}</th>
                    <td><a href="/order/${order.id}" style="color: #000;"><b>${order.customer.name || 'N/A'}</b></a></td>
                    <td class="text-end">${order.employee || 'N/A'}</td>
                    <td class="text-end">${order.total_amount}</td>
                    <td class="text-end">${order.status}</td>
                    <td class="text-end">${order.payment}</td>
                    <td class="text-end">
                        <form action="/orders/${order.id}" method="POST" style="display:inline;">
                            <input type="hidden" name="_token" value="${csrfToken}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm delete-button" onclick="return confirm('Are you sure you want to delete this order?')" style="padding: 0; font-size: 16px; width: 30px; height: 30px; background: none; border: none; color: red;">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            `);
        });
    }

    function updatePaginationControls(paginationData) {
        paginationControls.innerHTML = '';
        if (paginationData.prev_page_url) {
            paginationControls.insertAdjacentHTML('beforeend', `<button class="pagination-button" data-page="${paginationData.current_page - 1}">Previous</button>`);
        }

        for (let i = 1; i <= paginationData.last_page; i++) {
            paginationControls.insertAdjacentHTML('beforeend', `<button class="pagination-button" data-page="${i}">${i}</button>`);
        }

        if (paginationData.next_page_url) {
            paginationControls.insertAdjacentHTML('beforeend', `<button class="pagination-button" data-page="${paginationData.current_page + 1}">Next</button>`);
        }
    }

    // Event delegation for pagination buttons
    paginationControls.addEventListener('click', function(event) {
        if (event.target.matches('.pagination-button')) {
            const page = event.target.getAttribute('data-page');
            loadOrders(page);
        }
    });

    // Initial load
    loadOrders();
});
