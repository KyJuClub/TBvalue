function validate1(form)
{
    alert("Javascript function read!");
    
    fail = validateBookname(form.bookname.value)
    fail += validateAuthor(form.author.value)
    
    if (fail == "") return true
    else { $('#register').html(fail); return false }
}

function validateBookname(field)
{
    if (field == "") return "No book was entered.<br>"
    return ""
}

function validateAuthor(field)
{
    if (field == "") return "No author was entered.<br>"
    return ""
}