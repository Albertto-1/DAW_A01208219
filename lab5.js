function checarForm(form)
{
    if(form.pass1.value != "" && form.pass1.value == form.pass2.value)
    {
        alert("La contraseña es correcta");
        return true;
    }
    else if(form.pass1.value != form.pass2.value)
    {
        alert("Las contraseñas ingresadas no coinciden");
        return false;
        
    }
    return true;
}

