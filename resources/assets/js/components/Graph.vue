<template>
<!-- 	<div class="chart-container" style="position: relative; height:40vh; width:80vw"> -->
		<canvas id="myChart"></canvas>
	<!-- </div> -->
</template>

<script>
	export default {
		props: ['labels', 'values', 'name', 'sex', 'borderColor', 'backgroundColor'],

		// data() {
		// 	return {
		// 		labels: '',
		// 		values: ''
		// 	}
		// },

		mounted() {
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'line',
			    data: {
			        labels: this.labels,
			        datasets: [{
			            label: '# of ' + this.sex + ' babies named ' + this.name,
			            data: this.values,
			            backgroundColor: [
			                this.backgroundColor
			            ],
			            borderColor: [
			                this.color
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