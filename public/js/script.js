document.getElementById('passValue').addEventListener('click', function(){
    
    let passTitle = document.getElementById('inputTitle').value;
    let passDate = document.getElementById('inputDate').value;
    let passDescription = document.getElementById('inputDescription').value;
    
    document.getElementById('title').value = passTitle;
    document.getElementById('date').value = passDate;
    document.getElementById('description').value = passDescription;

    document.getElementById('textTitle').innerText = passTitle;
    document.getElementById('textDate').innerText = passDate;
    document.getElementById('textDescription').innerText = passDescription;
});

document.getElementById('clear').addEventListener('click', function() {
	document.getElementById('inputTitle').value = "";
    document.getElementById('inputDate').value = "";
    document.getElementById('inputDescription').value = "";

   

});