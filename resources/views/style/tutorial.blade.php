<style>
*, html {
    margin:0;
    padding:0;
}

.container {
}

.container-navbar {
    height: 10vh;
    width: 100%;
    text-decoration: none;
}

.ul-navbar {
    height: 100%;
    display: flex;
    justify-content: center; /* Mengatur item-item di tengah */
    align-items: center;
}

.li-navbar {
    list-style-type: none;
    padding: 0 10px; /* Sesuaikan padding agar item terlihat terpisah */
    color: white;
}

.a-navbar {
    color: #717172;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Open Sans', sans-serif;
}

.p-navbar {
    color: #041151;
    text-decoration: none;
    font-weight: 600;
    font-family: 'Open Sans', sans-serif;;
}

.a-navbar:hover {
    color: #041151;
    transition: .2s ease-in-out;
    border-radius: 15px;
}

.login a{
    position: absolute;
    top: 13;
    right: 20;
    padding: 10px 13px;
    color: white;
    background-color: #007bff;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
}

.login a:hover {
    background-color: #0056b3;
}

.container-content {
    position: relative; /* Diperlukan untuk overlay */
    background-size: cover;
    background-position: center;
    height: 83vh;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.container-content::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Warna hitam transparan */
}

.carousel-inner {
    position: absolute; /* Untuk menempatkan teks di atas gambar latar belakang */
    top: 40%; /* Atur posisi vertikal ke tengah */
    left: 50%; /* Atur posisi horizontal ke tengah */
    transform: translate(-50%, -50%); /* Untuk mengatur posisi tepat di tengah */
    text-align: center; /* Untuk mengatur teks agar berada di tengah */
    z-index: 2; /* Agar teks berada di atas gambar */
}

.img-content {
    height: 83vh;
    width: 100%;
    object-fit: cover; /* Untuk mengatur gambar agar mengisi seluruh kontainer */
}

.col-sm-12{
    background-color: #717172be;
    border-radius: 5px;
    padding: 30px;
}
.banner_taital {
    color: white; /* Warna teks */
    font-size: 3.5rem; /* Ukuran teks */
    font-style: italic;
    margin-bottom: 20px; /* Jarak antara judul dan paragraf */
    font-family: 'Open Sans', sans-serif;
}

.banner_text {
    color: white; /* Warna teks */
    font-size: 1rem; /* Ukuran teks */
    font-family: 'Open Sans',sans-serif;
   
}

.a-content {
    color:black;
    text-decoration:none;
}

.container-footer {
    height:7vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.h1-footer {
    color: #041151;
    font-size:15px;
    font-family: 'Open Sans', sans-serif;
    font-weight:100;
}
</style>