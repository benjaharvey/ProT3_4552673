<h1>Panel de usuario</h1>

<p>Bienvenido, <strong><?= esc($nombre_usuario) ?></strong></p>
<p>Tu correo: <?= esc($email_usuario) ?></p>

<a href="<?= base_url('/logout') ?>">Cerrar sesión</a>
