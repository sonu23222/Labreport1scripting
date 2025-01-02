function findSmallest() {
    const input = document.getElementById('numbers').value;
    if (!input) {
        document.getElementById('result').innerText = "Please enter some numbers.";
        return;
    }

    const numArray = input.split(',').map(Number);


    if (numArray.some(isNaN)) {
        document.getElementById('result').innerText = "Invalid input! Please enter only numbers separated by commas.";
        return;
    }


    const smallest = Math.min(...numArray);


    document.getElementById('result').innerText = `The smallest number is: ${smallest}`;
}