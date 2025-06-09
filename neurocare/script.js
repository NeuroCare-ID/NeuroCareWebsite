const doctors = [
    { name: "dr. Andika Pratama, Sp.S", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Maria Ulfa, Sp.S", spec: "Spesialis Saraf", exp: "6 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Riska Mulyani, Sp.N", spec: "Spesialis Neurologi", exp: "9 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Yulianto, Sp.S", spec: "Spesialis Saraf", exp: "5 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Lusia Indah, Sp.N", spec: "Spesialis Neurologi", exp: "12 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Ahmad Rizal, Sp.S", spec: "Spesialis Saraf", exp: "9 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Ratna Dewi, Sp.N", spec: "Spesialis Neurologi", exp: "15 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Ferry Gunawan, Sp.S", spec: "Spesialis Saraf", exp: "6 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Nur Lestari, Sp.N", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Dian Cahyani, Sp.S", spec: "Spesialis Saraf", exp: "13 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. Syifa Amelia, Sp.N", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" },
    { name: "dr. I Made Arta, Sp.S", spec: "Spesialis Saraf", exp: "10 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "dokterkonsul.png" }
  ];
  
  function renderDoctors(doctors) {
    const container = document.getElementById('doctorGrid');
    container.innerHTML = '';
  
    doctors.forEach(doctor => {
      const card = document.createElement('div');
      card.className = 'doctor-card';
      card.innerHTML = `
        <img src="${doctor.img}" alt="${doctor.name}" class="doctor-photo">
        <div class="doctor-info">
          <h3>${doctor.name}</h3>
          <p>${doctor.spec}</p>
          <p><i class="fa-solid fa-briefcase"></i> ${doctor.exp}</p>
          <p><i class="fa-solid fa-star"></i> ${doctor.rating}</p>
          <p><i class="fa-solid fa-money-bill-wave"></i> ${doctor.price}</p>
          <button class="chat-button">Chat</button>
        </div>
       `;
      container.appendChild(card);
    });
  }  
  
  document.getElementById("searchInput").addEventListener("input", e => {
    const keyword = e.target.value.toLowerCase();
    const filtered = doctors.filter(doc => doc.name.toLowerCase().includes(keyword));
    renderDoctors(filtered);
  });
  
  renderDoctors(doctors);

 // Placeholder untuk interaktivitas jika dibutuhkan nanti
console.log("Halaman Komunitas berhasil dimuat.");

const searchInput = document.querySelector('.search-bar input');
const cards = document.querySelectorAll('.card');

searchInput.addEventListener('input', function () {
  const keyword = this.value.toLowerCase();
  cards.forEach(card => {
    const title = card.querySelector('.title').textContent.toLowerCase();
    const desc = card.querySelector('.desc').textContent.toLowerCase();
    const match = title.includes(keyword) || desc.includes(keyword);
    card.style.display = match ? 'block' : 'none';
  });
});


