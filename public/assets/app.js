// Compteurs animés
document.querySelectorAll('.counter').forEach((el) => {
    const target = parseFloat(el.getAttribute('data-target') || el.textContent);
    const isPercent = el.nextElementSibling && el.nextElementSibling.textContent.trim() === '%';
    const duration = 900; // ms
    const start = performance.now();
  
    const animate = (t) => {
      const p = Math.min((t - start) / duration, 1);
      const val = target * (0.25 + 0.75 * p); // petit easing
      el.textContent = isPercent ? val.toFixed(1) : Math.floor(val).toLocaleString();
      if (p < 1) requestAnimationFrame(animate);
    };
    requestAnimationFrame(animate);
  });
  
  // Mini chart (activité)
  const canvas = document.getElementById('miniChart');
  if (canvas && window.Chart) {
    const ctx = canvas.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
        datasets: [{
          label: 'Activité',
          data: [12, 19, 15, 25, 22, 30, 28],
          tension: 0.35,
          fill: true
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: {
          x: { grid: { display: false } },
          y: { grid: { color: 'rgba(255,255,255,0.08)' } }
        }
      }
    });
  }
  