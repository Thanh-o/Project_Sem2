 
<div class="container">  
    <h1>Danh sách đơn hàng</h1>  
    <div id="orders-container">  
        <!-- Danh sách đơn hàng sẽ được tải ở đây -->  
    </div>  
    <div id="pagination">  
        <!-- Nút phân trang sẽ được tải ở đây -->  
    </div>  
</div>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
<script>  
$(document).ready(function() {  
    let currentPage = 1;  

    function loadOrders(page) {  
        $.ajax({  
            url: '/orders?page=' + page,  
            type: 'GET',  
            success: function(data) {  
                const orders = data.data;  
                $('#orders-container').empty(); // Xóa nội dung cũ trước khi tải mới  

                if (orders.length > 0) {  
                    $.each(orders, function(index, order) {  
                        $('#orders-container').append(`  
                            <div class="order">  
                                <p>ID: ${order.id}</p>  
                                <p>Tên khách hàng: ${order.customer.name}</p>  
                                <p>Ngày đặt hàng: ${order.created_at}</p>  
                                <p>Tổng tiền: ${order.total}</p>  
                                <hr>  
                            </div>  
                        `);  
                    });  
                }  

                loadPagination(data); // Tải nút phân trang  
            }  
        });  
    }  

    function loadPagination(data) {  
        $('#pagination').empty(); // Xóa nút phân trang cũ  
        const totalPages = data.last_page;  

        for (let i = 1; i <= totalPages; i++) {  
            $('#pagination').append(`  
                <button class="page-btn" data-page="${i}">${i}</button>  
            `);  
        }  

        // Nút hiện tại  
        $('.page-btn[data-page="' + currentPage + '"]').addClass('active');  
    }  

    // Tải đơn hàng khi tải trang  
    loadOrders(currentPage);  

    // Xử lý sự kiện cho nút phân trang  
    $(document).on('click', '.page-btn', function() {  
        currentPage = $(this).data('page'); // Lấy trang đã chọn  
        loadOrders(currentPage); // Tải đơn hàng cho trang đã chọn  
        $('.page-btn').removeClass('active'); // Xóa lớp active khỏi tất cả các nút  
        $(this).addClass('active'); // Thêm lớp active cho nút hiện tại  
    });  
});  
</script>  

<style>  
.active {  
    background-color: #007bff; /* Màu nền cho nút hiện tại */  
    color: white; /* Màu chữ cho nút hiện tại */  
}  
.page-btn {  
    margin: 5px;  
}  
</style>  
