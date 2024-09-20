let selectedInput = null;

function openModal(inputElement) {
    selectedInput = inputElement;
    document.getElementById('menuModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('menuModal').style.display = 'none';
}

function selectDish(imgElement) {
    imgElement.classList.toggle('selected');
    updateSelectedDishes();
}

function updateSelectedDishes() {
    const selectedImages = document.querySelectorAll('.menu-images img.selected');
    const selectedDishes = Array.from(selectedImages).map(img => img.alt);
    selectedInput.value = selectedDishes.join(', ');
}



document.getElementById('addMoreBtn').addEventListener('click', function() {
    const inputContainer = document.getElementById('input-container');

    // Create new input row
    const inputRow = document.createElement('div');
    inputRow.className = 'input-row';

    // Create new input
    const newInput = document.createElement('input');
    newInput.type = 'text';
    newInput.name = 'menu[]';
    newInput.readOnly = true;
    newInput.onclick = function() {
        openModal(this);
    };

    // Create delete button
    const deleteBtn = document.createElement('button');
    deleteBtn.className = 'delete-btn';
    deleteBtn.innerHTML = '<img src="https://img.icons8.com/ios-filled/20/000000/trash.png" alt="Delete">';

    // Add delete functionality
    deleteBtn.addEventListener('click', function() {
        inputContainer.removeChild(inputRow);
    });

    // Append input and delete button to the input row
    inputRow.appendChild(newInput);
    inputRow.appendChild(deleteBtn);

    // Append input row to the container
    inputContainer.appendChild(inputRow);
});

// Add delete functionality to the initial input
document.querySelector('.delete-btn').addEventListener('click', function() {
    const inputRow = this.parentNode;
    inputRow.parentNode.removeChild(inputRow);
});
