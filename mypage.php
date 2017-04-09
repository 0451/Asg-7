<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<style>



</style>
<script>

    $(document).ready(function(){

        document.body.style.backgroundColor = "lightgrey";
        if (document.cookie.length > 0) {
            var color = "setcolor=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    var getcolor = c.substring(color.length, c.length);
                    document.body.style.backgroundColor = getcolor;

                }
            }

        }



    })


    function changeColor() {
        if ($("select#changestyle").val() == "spring") {
            document.body.style.backgroundColor = "lightgreen";
            document.cookie = "setcolor=lightgreen";
        } else if ($("#changestyle").val() == "summer") {

            document.body.style.backgroundColor = "lightyellow";
            document.cookie = "setcolor=lightyellow";

        } else if ($("#changestyle").val() == "winter") {
            document.body.style.backgroundColor = "powderblue";
            document.cookie = "setcolor=powderblue";

        } else if ($("#changestyle").val() == "autumn") {
            document.body.style.backgroundColor = "orange";
            document.cookie = "setcolor=orange";


        }
    }

</script>

<body>
<div align="center">
<h1> Welcome to my page. Please select any option to change the background color</h1>

Select Color:<br/>
<select onchange="changeColor()" id="changestyle" name="changestyle">
    <option value="spring">Spring</option>
    <option value="summer">Summer</option>
    <option value="winter">Winter</option>
    <option value="autumn">Autumn</option>
</select>
    <h3> Refresh the page after your selection</h3>


</div>
</body>
</html>