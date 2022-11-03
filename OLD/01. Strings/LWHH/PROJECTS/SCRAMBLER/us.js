let tableWraper = document.querySelector('.table-wrapper')
let hiddenID = document.querySelector('.hidden')
let hiddenID2 = document.querySelector('.hidden2')
let editName = document.querySelector('.editName')
let editEmail = document.querySelector('.editEmail')
let editAddress = document.querySelector('.editAddress')
let editPhone = document.querySelector('.editPhone')

tableWraper.addEventListener('click', (e) => {
    if (e.target.parentElement.classList.contains('edit')) {
        hiddenID.value =
            e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.value

        editName.value =
            e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.textContent

        editEmail.value =
            e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.textContent

        editAddress.value =
            e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.textContent

        editPhone.value =
            e.target.parentElement.parentElement.previousElementSibling.textContent
    } else if (e.target.parentElement.classList.contains('delete')) {
        hiddenID2.value =
            e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.value
    }
})
