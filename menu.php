<!--navbar -->
<nav class="navbar navbar-default">
	<div class="container">

		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="keranjang.php">Keranjang</a></li>
			<!-- jk sudah login(ada session pelanggan) -->
			<?php if (isset($_SESSION["pelanggan"])): ?>
				<li><a href="logout.php">Logout</a></li>
			<!-- selain itu(belum login||blm ada session pelanggan) -->
			<?php else:  ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="daftar.php">Daftar Pelanggan</a></li>
			<?php endif ?>
			
			<li><a href="checkout.php">Checkout</a></li>
		</ul>
	</div>
</nav>