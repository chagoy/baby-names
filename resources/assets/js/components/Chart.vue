<template>
	<canvas id="myChart" width="400" height="400"></canvas>
</template>

<script>
	export default {
		props: ['years'],

		data() {
			return {
				labels: '',
				values: ''
			}
		},

		mounted() {
			var ctx = document.getElementById('myChart');
			this.labels = Object.values(this.years);
			this.values = Object.keys(this.years)
			var myChart = new Chart(ctx, {
			type: 'bar',
			    data: {
			        labels: this.labels,
			        datasets: [{
			            label: '# of Votes',
			            data: this.values,
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)',
			                'rgba(153, 102, 255, 0.2)',
			                'rgba(255, 159, 64, 0.2)'
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)',
			                'rgba(153, 102, 255, 1)',
			                'rgba(255, 159, 64, 1)'
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});
		}
	}
</script>