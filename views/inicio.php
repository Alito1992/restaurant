<?php include "sections/header.html";?>
<h2> Has tu reserva <h2>
<form method="post">
    <table>
        <tr>
            <td>Rut</td>
            <td><input type="text" name="rut" required/></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="nombre" required/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Reservar"/>
            </td>
        </tr>
    </table>
   
</form>
<?php include "sections/footer.html";?>



