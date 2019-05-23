
//this is the students form js validation function
function student () {
    var name = document.getElementById('jina').value;
    var course = document.getElementById('john').value;
    var modeli = document.getElementById('model').value;
    var serial_number = document.getElementById('serial').value;

    if (name=='' || course=='' || modeli=='' || serial_number=='')
    {
        alert('Please Enter Real Values then Submit');
        return false;
    }

    else if(name.length<3)
    {
        alert('Name must be atleast 4 characters');
        return false;
    }

    else if(course.length<3)
    {
        alert('Course must be atleast 4 characters');
        return false;
    }

    else if(modeli.length<2)
    {
        alert('Model must be atleast 2 characters');
        return false;
    }

    else if(serial_number.length<3)
    {
        alert('Serial Number must be atleast 4 characters');
        return false;
    }

    else
    {
        return true;
    }

};


//this js code is for the lecturer form validation
function lecturer () {
    var name = document.getElementById('car').value;
    var course = document.getElementById('chair').value;
    var modeli = document.getElementById('old').value;
    var serial_number = document.getElementById('gender').value;

    if (name=='' || course=='' || modeli=='' || serial_number=='')
    {
        alert('Please Enter Real Values then Submit');
        return false;
    }

    else if(name.length<3)
    {
        alert('Name must be atleast 4 characters');
        return false;
    }

    else if(course.length<3)
    {
        alert('Course must be atleast 4 characters');
        return false;
    }

    else if(modeli.length<2)
    {
        alert('Model must be atleast 2 characters');
        return false;
    }

    else if(serial_number.length<3)
    {
        alert('Serial Number must be atleast 4 characters');
        return false;
    }

    else
    {
        return true;
    }
};


function staff () {
    var name = document.getElementById('dart').value;
    var course = document.getElementById('shade').value;
    var modeli = document.getElementById('bet').value;
    var serial_number = document.getElementById('polite').value;

    if (name=='' || course=='' || modeli=='' || serial_number=='')
    {
        alert('Please Enter Real Values then Submit');
        return false;
    }

    else if(name.length<3)
    {
        alert('Name must be atleast 4 characters');
        return false;
    }

    else if(course.length<3)
    {
        alert('Course must be atleast 4 characters');
        return false;
    }

    else if(modeli.length<2)
    {
        alert('Model must be atleast 2 characters');
        return false;
    }

    else if(serial_number.length<3)
    {
        alert('Serial Number must be atleast 4 characters');
        return false;
    }

    else
    {
        return true;
    }
};


function visitor () {
    var name = document.getElementById('clueless').value;
    var course = document.getElementById('looking').value;
    var modeli = document.getElementById('nervous').value;
    var serial_number = document.getElementById('thanks').value;

    if (name=='' || course=='' || modeli=='' || serial_number=='')
    {
        alert('Please Enter Real Values then Submit');
        return false;
    }

    else if(name.length<3)
    {
        alert('Name must be atleast 4 characters');
        return false;
    }

    else if(course.length<3)
    {
        alert('Course must be atleast 4 characters');
        return false;
    }

    else if(modeli.length<2)
    {
        alert('Model must be atleast 2 characters');
        return false;
    }

    else if(serial_number.length<3)
    {
        alert('Serial Number must be atleast 4 characters');
        return false;
    }

    else
    {
        return true;
    }
};
