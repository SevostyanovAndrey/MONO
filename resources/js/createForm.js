const showFormButton = document.getElementById('showFormButton');

showFormButton.addEventListener('click', () => {
    // Generate the new form markup
    const newFormMarkup = `
        <div class="m-3">
            <div style="width: 30%">

                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Марка</span>
                    <input type="text" class="form-control" placeholder="Марка" aria-label="Марка"
                           aria-describedby="addon-wrapping" >
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Модель</span>
                    <input type="text" class="form-control" placeholder="Модель" aria-label="Модель"
                           aria-describedby="addon-wrapping" >
                </div>
                <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text" id="basic-addon1">Цвет кузова</span>
                    <input type="text" class="form-control" placeholder="Цвет кузова" aria-label="Цвет кузова"
                           aria-describedby="addon-wrapping" >
                </div>

            </div>
            <div class="input-group flex-nowrap mb-3" style="width: 37.2%">
                <span class="input-group-text" id="basic-addon1">Гос номер РФ</span>
                <input type="text" class="form-control" placeholder="Гос номер РФ"
                       style="border-bottom-right-radius: 7px; border-top-right-radius: 7px" >
                <button type="button" class="btn btn-success" style="margin-left: 10px; border-top-left-radius:7px; border-bottom-left-radius: 7px ">Сохранить</button>
            </div>
            <hr class="mb-5 mt-5" style="width: 30%; border-bottom: 2px solid black">
        </div>
    `;

    // Create the new form element
    const newForm = document.createElement('form');
    newForm.innerHTML = newFormMarkup;

    // Append the new form to the document body
    document.body.appendChild(newForm);

    // Show the new form
    newForm.style.display = 'block';
});
