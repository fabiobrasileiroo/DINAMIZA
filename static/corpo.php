<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Resumo</strong> Financeiro Pessoal</h1>
					
					
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Compras</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">382</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
													<span class="text-muted">Desde a semana passada</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Dados inseridos</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">212</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
													<span class="text-muted">Desde a semana passada</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Ganhos</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="credit-card"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">$1.300</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
													<span class="text-muted">Desde a semana passada</span>
												</div>
											</div>
										</div>
										<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<h5 class="card-title">Receitas</h5>
												</div>

												<div class="col-auto">
													<div class="stat text-success">
														<i class="align-middle" data-feather="dollar-sign"></i>
													</div>
												</div>
											</div>
											<h1 class="mt-1 mb-3">R$ 5.000</h1>
											<div class="mb-0">
												<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.25% </span>
												<span class="text-muted">Desde a semana passada</span>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Histórico Financeiro</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Uso de Browser</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Chrome</td>
													<td class="text-end">5</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-end">1</td>
												</tr>
												<tr>
													<td>IE</td>
													<td class="text-end">2</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Gasto por Região</h5>
								</div>
								<div class="card-body px-4">
									<div id="map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Calendario</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Metas e Projetos Financeiros</h5>
								</div>
								<table class="table table-hover my-0">
    <thead>
        <tr>
            <th>Nome</th>
            <th class="d-none d-xl-table-cell">Data de Início</th>
            <th class="d-none d-xl-table-cell">Data de Término</th>
            <th>Status</th>
            <th class="d-none d-md-table-cell">Responsável</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Projeto Apollo</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-success">Concluído</span></td>
            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
        </tr>
        <tr>
            <td>Projeto Fireball</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-danger">Cancelado</span></td>
            <td class="d-none d-md-table-cell">William Harris</td>
        </tr>
        <tr>
            <td>Projeto Hades</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-success">Concluído</span></td>
            <td class="d-none d-md-table-cell">Sharon Lessman</td>
        </tr>
        <tr>
            <td>Projeto Nitro</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-warning">Em andamento</span></td>
            <td class="d-none d-md-table-cell">Vanessa Tucker</td>
        </tr>
        <tr>
            <td>Projeto Phoenix</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-success">Concluído</span></td>
            <td class="d-none d-md-table-cell">William Harris</td>
        </tr>
        <tr>
            <td>Projeto X</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-success">Concluído</span></td>
            <td class="d-none d-md-table-cell">Sharon Lessman</td>
        </tr>
        <tr>
            <td>Projeto Romeo</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-success">Concluído</span></td>
            <td class="d-none d-md-table-cell">Christina Mason</td>
        </tr>
        <tr>
            <td>Projeto Wombat</td>
            <td class="d-none d-xl-table-cell">01/01/2023</td>
            <td class="d-none d-xl-table-cell">31/06/2024</td>
            <td><span class="badge bg-warning">Em andamento</span></td>
            <td class="d-none d-md-table-cell">William Harris</td>
        </tr>
    </tbody>
</table>

							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Desempenho Mensal</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
						
				</div>
			</main>