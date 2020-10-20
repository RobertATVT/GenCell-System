function loadPlayer() {
/* document.getElementById("main-content").innerHTML='<object type="type/html" data="/settings/Black_Bayou/1a_Intro.html" ></object>';*/
/*    $(document).ready(function(){
        $("button").click(function(){
            $("#main-content").load("/settings/Black_Bayou/1a_Intro.html");
        });
    });*/
}


function adjustCPL(adjCPL) {
    var setCPL = document.getElementById("valueBPs").value;
    var adjustCPL = adjCPL.value;
    var newCPL = document.getElementById("valueBPs").value;
    var newCPL = newCPL - adjustCPL;
    document.getElementById("valueBPs").value = newCPL;
}

function setCPL(valCPL) {
    var valueCPL = valCPL.value;
    document.getElementById("valueBPs").value = valueCPL;
}

/*function characterModalRequested(elementID) {
    jQuery('#gccModal').modal();
    jQuery('#gccModal').modal('show');

}*/

function gccModal(other, operation, item, dialog) {
    switch(operation) {
        case "remDept":
            document.getElementById('gccModal').innerHTML = dialog;
            clickEvent = document.getElementById(item);
            clickEvent.onclick = function () {remDept(other); $.modal.close();};
            break;
        case "editDept":
            document.getElementById('schModal').style.maxWidth = "1024px";
            document.getElementById('schModal').innerHTML = dialog;
            document.getElementById('editDeptM').value = other;
            var parentList = document.getElementById('departmentParent').innerHTML;
            document.getElementById('departmentParentM').innerHTML = parentList;
            var deptName = document.getElementById('schDeptFullName_' + other).getAttribute('value');
            var deptShort = document.getElementById('schDeptShort_' + other).getAttribute('value');
            var deptORG = document.getElementById('schDeptORG_' + other).getAttribute('value');
            var deptParent = document.getElementById('schDeptParent_' + other).getAttribute('value');
            document.getElementById('departmentNameM').value = deptName;
            document.getElementById('departmentShortM').value = deptShort;
            document.getElementById('departmentOrgM').value = deptORG;
            document.getElementById('departmentParentM').value = deptParent;
            /*document.getElementById('editDeptChange').addEventListener ("click", changeDept, false);*/
            /*document.getElementById('editDeptChange').onclick = function() {changeDept(other);};*/
            /*document.getElementById('departmentParentM').innerHTML += window.departmentList;*/
            break;
        case "simplePopup":
            document.getElementById('gccModal').style.maxWidth = "500px";
            document.getElementById('gccModal').innerHTML = dialog;
			$('#gccModal').modal();
            break;
		case "characterCreation":
            document.getElementById('gccModal').style.maxWidth = "1024px";
            document.getElementById('gccModal').innerHTML = dialog;
			$('#gccModal').modal();
            break;
        default:
            document.getElementById('schModal').innerHTML = modalDialogs.error;
    }
}

function gccModalEnd(operation){
    switch(operation) {
        case "reload":
            $.modal.close();
            location.reload();
            break;
        default:
            $.modal.close();
    }
}