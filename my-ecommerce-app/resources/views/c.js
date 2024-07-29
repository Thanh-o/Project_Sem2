document.getElementById('method').addEventListener('change', function() {
    var installmentOptions = document.getElementById('installment-options');
    var depositOptions = document.getElementById('deposit-options');
    
    installmentOptions.style.display = 'none';
    depositOptions.style.display = 'none';
    
    if (this.value === 'installment') {
        installmentOptions.style.display = 'block';
    } else if (this.value === 'deposit') {
        depositOptions.style.display = 'block';
    }
});

document.getElementById('bank-button').addEventListener('click', function() {
    var modal = document.getElementById('bank-modal');
    modal.style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    var modal = document.getElementById('bank-modal');
    modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
    var modal = document.getElementById('bank-modal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

document.querySelectorAll('#bank-list li').forEach(function(bankItem) {
    bankItem.addEventListener('click', function() {
        var selectedBank = bankItem.getAttribute('data-bank');
        var bankButton = document.getElementById('bank-button');
        var selectedBankName = document.getElementById('selected-bank-name');
        
        bankButton.textContent = 'Ngân hàng: ' + bankItem.textContent;
        selectedBankName.textContent = 'Ngân hàng đã chọn: ' + bankItem.textContent;
        
        document.getElementById('selected-bank').value = selectedBank;
        document.getElementById('change-bank-button').style.display = 'inline-block';
        document.getElementById('bank-modal').style.display = 'none';
    });
});

document.getElementById('change-bank-button').addEventListener('click', function() {
    var modal = document.getElementById('bank-modal');
    modal.style.display = 'block';
});
