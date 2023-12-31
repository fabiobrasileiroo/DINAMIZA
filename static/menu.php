<?php
function isPageActive($page)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return ($currentPage == $page) ? 'active' : '';
}
?>

	<nav id="sidebar" class="sidebar js-sidebar">
		<div  class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle" >DINAMI<span style="color:#8CBF26;">$</span>A</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<li style="background;" class="sidebar-item <?php echo isPageActive('index.php'); ?>">
						<a class="sidebar-link" href="index.php">
              <i  class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item <?php echo isPageActive('formCliente.php'); ?>"">
						<a class="sidebar-link" href="formCliente.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Usuário</span>
            </a>
					</li>

					<li class="sidebar-item <?php echo isPageActive('servico.php'); ?>">
						<a class="sidebar-link" href="pages-Profile.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Serviços</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-Profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="../Fintech/page/login.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Login</span>
            </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="../Fintech/page/criarConta.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Registrar</span>
            </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="../Fintech/page/criarConta.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Reset Senha</span>
					</li>

					<li class="sidebar-header">
						Configurações
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Boleto</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Pix</span>
            </a>
					</li>

			
					<li class="sidebar-header">
						Financeiro
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Pagamentos à Receber</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Pagamentos Recebidos</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Status Financeiro</span>
            </a>
					</li>
				</ul>

				
			</div>
		</nav>
