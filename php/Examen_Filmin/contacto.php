<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>

<h1>Contacto</h1>
<p>¡Nos encantaría saber de ti! Completa el formulario y nos pondremos en contacto contigo lo antes posible.</p>

<section id="contacto">
    <form method="post" action="enviar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" placeholder="Tu correo" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</section>

<?php include_once 'bloques/footer.php'; ?>
