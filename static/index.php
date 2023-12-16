<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

	<?php
        include 'header.php';
    ?>

<body>
	<div class="wrapper">
		<?php include 'menu.php'; ?>

		<div class="main">
            <?php 
                include 'topo.php'; 
            ?>

			<?php include 'corpo.php'; ?>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					datasets: [{
						label: "Dinheiro (R$)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [5, 1, 2],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-14, -55],3.9);

            L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            var moneyIcon = L.icon({
                iconUrl: 'img/icons/logo-pig.ico', // Substitua pelo caminho do seu ícone de dinheiro
                iconSize: [32, 32], // Ajuste o tamanho do ícone conforme necessário
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });

            var markers = [
                { coords: [-15.7801, -47.9292], name: "Brasília" },
                { coords: [-3.1190, -60.0217], name: "Manaus" },
				{ coords: [-23.5505, -46.6333], name: "São Paulo" },
                { coords: [-12.9714, -38.5014], name: "Salvador" },
                { coords: [-3.7172, -38.5433], name: "Fortaleza" },
                { coords: [-15.6010, -56.0974], name: "Cuiabá" },
                { coords: [-30.0330, -51.2200], name: "Porto Alegre" },
                { coords: [-19.9190, -43.9386], name: "Belo Horizonte" },
                { coords: [-7.1150, -34.8641], name: "João Pessoa" },
                { coords: [-22.9068, -43.1729], name: "Rio de Janeiro" },
                { coords: [-8.0476, -34.8770], name: "Recife" },
            ];

            markers.forEach(function(marker) {
                L.marker(marker.coords, { icon: moneyIcon }).addTo(map)
                    .bindPopup(marker.name);
            });
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date();
        var defaultDate = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
        
        flatpickr.l10ns.default.firstDayOfWeek = 0; // Configure o primeiro dia da semana (0 = domingo, 1 = segunda-feira, etc.)
        flatpickr.localize(flatpickr.l10ns.pt); // Configurar o idioma para português

        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Mês anterior\">&laquo;</span>",
            nextArrow: "<span title=\"Próximo mês\">&raquo;</span>",
            defaultDate: defaultDate,
            dateFormat: "d/m/Y" // Adicionado para formatar a data no padrão brasileiro
        });
    });
</script>




</body>

</html>