function decrement() {
    var inputElement = document.getElementById('jumlah_eskrim');
    var currentValue = parseInt(inputElement.value, 10);

    if (currentValue > 1) {
        inputElement.value = currentValue - 1;
        updateTotal();
    }
}

function increment() {
    var inputElement = document.getElementById('jumlah_eskrim');
    var currentValue = parseInt(inputElement.value, 10);

    if (currentValue < 99) {
        inputElement.value = currentValue + 1;
        updateTotal();
    }
}

