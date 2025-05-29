const doctors = [
    { name: "dr. Andika Pratama, Sp.S", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Maria Ulfa, Sp.S", spec: "Spesialis Saraf", exp: "6 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Riska Mulyani, Sp.N", spec: "Spesialis Neurologi", exp: "9 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Yulianto, Sp.S", spec: "Spesialis Saraf", exp: "5 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Lusia Indah, Sp.N", spec: "Spesialis Neurologi", exp: "12 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Ahmad Rizal, Sp.S", spec: "Spesialis Saraf", exp: "9 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Ratna Dewi, Sp.N", spec: "Spesialis Neurologi", exp: "15 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Ferry Gunawan, Sp.S", spec: "Spesialis Saraf", exp: "6 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Nur Lestari, Sp.N", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Dian Cahyani, Sp.S", spec: "Spesialis Saraf", exp: "13 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. Syifa Amelia, Sp.N", spec: "Spesialis Neurologi", exp: "8 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" },
    { name: "dr. I Made Arta, Sp.S", spec: "Spesialis Saraf", exp: "10 Tahun", rating: "4.8 / 5", price: "Rp 100.000", img: "https://via.placeholder.com/150" }
  ];
  
  function renderDoctors(data) {
    const grid = document.getElementById("doctorGrid");
    grid.innerHTML = "";
    data.forEach(doc => {
      const card = document.createElement("div");
      card.className = "doctor-card";
      card.innerHTML = `
        <img src="${doc.img}" alt="${doc.name}" />
        <h3>${doc.name}</h3>
        <p>${doc.spec}</p>
        <p>${doc.exp}</p>
        <div class="rating">⭐ <span>${doc.rating}</span></div>
        <p>${doc.price}</p>
        <button class="chat-button">Chat</button>
      `;
      grid.appendChild(card);
    });
  }
  
  document.getElementById("searchInput").addEventListener("input", e => {
    const keyword = e.target.value.toLowerCase();
    const filtered = doctors.filter(doc => doc.name.toLowerCase().includes(keyword));
    renderDoctors(filtered);
  });
  
  renderDoctors(doctors);

  