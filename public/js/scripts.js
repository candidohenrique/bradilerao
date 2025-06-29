function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "img/menu_white.svg";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "img/close_white.svg"; 
    }
}

// gráfico com as estatísticas
document.addEventListener('DOMContentLoaded', function () {
    const grafico = document.getElementById('graficoEstatisticas');

    if (grafico) {
        const ctx = grafico.getContext('2d');
        const estatisticas = JSON.parse(grafico.dataset.valores);
        const labels = JSON.parse(grafico.dataset.labels);

        Chart.defaults.font.family = 'VT323';
        Chart.defaults.font.size = 20;
        Chart.defaults.color = '#fff';

        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Estatísticas do Jogador',
                    data: estatisticas,
                    backgroundColor: 'rgba(1, 167, 70, 0.3)',
                    borderColor: '#fff',
                    borderWidth: 2,
                    pointBackgroundColor: '#01a746',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2
                }]
            },
            options: {
                responsive: false,
                scales: {
                    r: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.2)',
                            lineWidth: 1.5
                        },
                        angleLines: {
                            color: 'rgba(255, 255, 255, 0.4)', 
                            lineWidth: 1.5
                        },
                        pointLabels: {
                            color: '#fff',
                            font: {
                                family: 'VT323',
                                size: 20
                            }
                        },
                        ticks: {
                            display: false
                        }
                    }
                },
                elements: {
                    point: {
                        radius: 4
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        filter: function (tooltipItem) {
                            return tooltipItem.raw !== 0;
                        }
                    },
                    legend: {
                        labels: {
                            color: '#fff',
                            font: {
                                family: 'VT323',
                                size: 18
                            }
                        }
                    }
                }
            }
        });
    }
});

