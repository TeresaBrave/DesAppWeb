<?php require '_config.php'?>
<?php get_header()?>
<h2>Contacto</h2>


<section>
    <div class="contacto">
        <h3>Venga a conocernos</h3>
        <p>Teléfono: <a href="#">123 456 789</a></p>
        <p>Email: <a href="#">contacto@fontanerialosparatod.com</a></p>
        <address><p>Dirección: Calle del Agua, 123, Gijón</p></address>
    </div><!-- fin de contacto -->

    <div class="formulario">
        <h3>Contacte a través de nuestro formulario</h3>
        <form action="enviar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
        </div><!-- fin de formulario -->
</section>


<?php get_footer()?>