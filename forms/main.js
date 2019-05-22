
/* this js code is for validating the studentdisplayform data*/
function substitute1(){
    var myValue = document.getElementById("mytextbox1").value;
        if (myValue == '')
        {
            alert("Please Enter Real Value then Submit!!");
            return false;
        }

        else if(myValue.length<3)
        {
            alert('Name must be atleast 4 characters');
            return false;
        }

        else
        {
            return true;
        }
    }

/* this js code is for validating the lecturerdisplayform data*/
function substitute2(){
    var myValue = document.getElementById("mytextbox2").value;
        if (myValue == '')
        {
            alert("Please Enter Real Value then Submit!!");
            return false;
        }

        else if(myValue.length<3)
        {
            alert('Name must be atleast 4 characters');
            return false;
        }

        else
        {
            return true;
        }
    }

/* this js code is for validating the staffdisplayform data*/
function substitute3(){
    var myValue = document.getElementById("mytextbox3").value;
        if (myValue == '')
        {
            alert("Please Enter Real Value then Submit!!");
            return false;
        }

        else if(myValue.length<3)
        {
            alert('Name must be atleast 4 characters');
            return false;
        }

        else
        {
            return true;
        }
    }

/* this js code is for validating the visitordisplayform data*/
function substitute4(){
    var myValue = document.getElementById("mytextbox4").value;
        if (myValue == '')
        {
            alert("Please Enter Real Value then Submit!!");
            return false;
        }

        else if(myValue.length<3)
        {
            alert('Name must be atleast 4 characters');
            return false;
        }

        else
        {
            return true;
        }
    }