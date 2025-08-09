<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Box</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid pb-2 bg-success">
        <h1 class="text-center pt-3 text-white">Welcome to <strong>Plant Box</strong></h1>
        <p class="text-white text-center">ช่วยคนปลูกต้นไม้จากคนที่ไม่ปลูกต้นไม้</p>
    </div>

    <main>
        <div class="add_box text-center mt-4 mb-5">
            <button class="btn btn-primary" id="addBoxBtn">เพิ่ม Box</button>
      <div id="addBoxForm" class="container mb-5 border rounded p-3 bg-light" style="display: none">
      <h3>กรอกข้อมูลกล่องใหม่</h3>
      <form id="boxForm">
        <div class="mb-3">
          <label for="apiInput" class="form-label">API URL</label>
          <input
            type="text"
            class="form-control"
            id="apiInput"
            placeholder="http://..."
            required
          />
        </div>
        <div class="mb-3">
          <label for="ipInput" class="form-label">IP Address</label>
          <input
            type="text"
            class="form-control"
            id="ipInput"
            placeholder="เช่น 192.168.1.10"
            required
          />
        </div>
        <button id="addBoxSubmit" type="submit" class="btn btn-success">เพิ่ม</button>
        <button type="button" id="cancelBtn" class="btn btn-secondary ms-2">
          ยกเลิก
        </button>
      </form>
    </div>
        </div>
    <div id="additionalBoxes" class="container-fluid" class=""></div>
    </main>

    <div class="container-fluid mt-5">
        <h2 class="text-center mb-4"><em><strong>How to</strong></em> ผู้เริ่มต้น</h2>
        <div class="row">
            <div class="col m-3">
            <figure>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/g1EvfNwG_l0?si=1OG3G9G8TzFHHj9D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <figcaption class="text-center"><strong>ปลูกอย่างไรให้รอด</strong></figcaption>
            </figure>
            </div>
            <div class="col m-3">
            <figure>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zfSt5PnTrvM?si=--RY_lUudQbJsmkL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <figcaption class="text-center"><strong>เริ่มกับผักสวนครัว</strong></figcaption>
            </figure>
            </div>
            <div class="col m-3">
            <figure>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JVM6n5_bnww?si=ZPgY172nhiyd42dm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <figcaption class="text-center"><strong>ลองปลูกผัก</strong></figcaption>
            </figure>
            </div>
        </div>
        <div class="row">
            <div class="col m-3">
                <figure>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6S3ArW4jvxU?si=XJRGdCWiboOqokZJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <figcaption class="text-center"><strong>ทำกระถางจากขวด</strong></figcaption>
                </figure>
            </div>
            <div class="col m-3">
                <figure>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2uH_OE7TxqA?si=njVD1N9Rai-c8FjX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <figcaption class="text-center"><strong>กระถางต้นไม้กินน้ำเอง</strong></figcaption>
                </figure>
            </div>
            <div class="col m-3">
                <figure>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6bRV5KgPJzc?si=ITHSDrkAdE-Bna5q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <figcaption class="text-center"><strong>กระถางรู้ปริมาณน้ำในถัง</strong></figcaption>
                </figure>
            </div>
        </div>
        <h2 class="text-center mt-5 mb-4">About <em><strong>Plant Box</strong></em></h2>
        <div class="row">
            <div class="col mt-4"><figure><img src="https://inwfile.com/s-o/czz2nc.jpg" height="450" width="900" alt=""><figcaption class="text-center">ตัวอย่าง <strong>Plant Box</strong></figcaption></figure></div>
            <div class="col mt-4"><h3><em><strong>Plan Box</strong></em> คือโครงงานวิทยาศาสตร์ที่จะสร้างกล่องที่มีเซนเซอร์ในการวัดค่าต่างๆ เช่น อุณหภูมิ ความชื้น ภายในดิน และจะรวบรวมข้อมูลสองอย่างนั้นมาแสดงผลให้ผู้ใช้
                ได้ทราบว่าพืชที่ปลุกในตอนนี้มีอุณหภูมิและความชื้นมากน้อยเท่าใด เพราะปัญหาคือคนส่วนใหญ่ไม่รู้ว่าควรจะดูเเลพืชที่ตัวเองปลูกอย่างไรไม่ทราบว่าพืชที่ปลูกต้องการน้ำเท่าไหร่ต้องการเเสงมากหรือไม่ <em><strong>Plant Box</strong></em> เลยจะเข้ามาแก้ปัญหานี้ 
                โดยจะมีเซนเซอร์หลักๆคือ MH-Sensor สำหรับวัดความชื้นในดิน DS18B20 สำหรับวัดอุณหภูมิในดิน ฯลฯ ในอนาคต และเราจะแสดงค่าให้ผู้ใช้เห็นว่าพืชที่ปลูกมีค่าต่างๆเท่าใด ผู้ใช้สามารถค้นหาว่าต้นไม้แต่ละต้นต้องปลูกอย่างไรต้องการน้ำ อุณหภูมิและความชื้นมากน้อยเท่าใด
                ทุกๆอย่างเกี่ยวกับพืชจะรวมกันใน <em><strong>Plant Box</strong></em> โดยในอนาคตจะมีการพัฒนาเพิ่มเซนเซอร์ให้มากขึ้นเพื่อที่จะทราบอย่างแน่นอนว่าพืชของเราต้องการสิ่งไหนบ้าง มากหรือน้อย
            </h3></div>        
        </div>
    </div>

    <footer class="bg-success text-white text-center py-3 mt-6">
        <p>&copy; 2025 Plant Box | Rattanathibate School</p>
    </footer>

<script>
  // อัปเดตเวลาในทุกกล่อง
  function updateAllTimes() {
    const now = new Date();
    const day = String(now.getDate()).padStart(2, "0");
    const month = String(now.getMonth() + 1).padStart(2, "0");
    const year = now.getFullYear();
    const hours = String(now.getHours()).padStart(2, "0");
    const minutes = String(now.getMinutes()).padStart(2, "0");
    const seconds = String(now.getSeconds()).padStart(2, "0");
    const dateTimeStr = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;

    document.querySelectorAll(".datetime").forEach(el => {
      el.innerText = dateTimeStr;
    });
  }

  // อัปเดตข้อมูลกล่องทั้งหมด
  async function updateAdditionalBoxes() {
    const boxes = document.querySelectorAll("#additionalBoxes .box");
    for (const box of boxes) {
      const apiUrl = box.getAttribute("data-api");
      try {
        const res = await fetch(apiUrl);
        if (!res.ok) throw new Error("API error");
        const data = await res.json();
        if (data.length > 0) {
          const tempEl = box.querySelector(".temp");
          const moistureEl = box.querySelector(".moisture");
          if(tempEl) tempEl.innerText = data[0].temperature + " °C";
          if(moistureEl) moistureEl.innerText = data[0].moisture + " %";
        }
      } catch {
        const tempEl = box.querySelector(".temp");
        const moistureEl = box.querySelector(".moisture");
        if(tempEl) tempEl.innerText = "-- °C";
        if(moistureEl) moistureEl.innerText = "-- %";
      }
    }
  }

  // ฟังก์ชันรวมอัปเดตข้อมูลทั้งหมด
  async function updateAllBoxes() {
    updateAllTimes();
    await updateAdditionalBoxes();
  }

  // เริ่มอัปเดตเวลาทุก 1 วินาที
  setInterval(updateAllTimes, 1000);

  // เริ่มอัปเดตข้อมูลทุก 5 วินาที
  setInterval(updateAllBoxes, 5000);

  // เรียกอัปเดตครั้งแรก
  updateAllBoxes();

  // ฟังก์ชันบันทึกกล่องทั้งหมดลง localStorage
  function saveBoxes() {
    const boxes = document.querySelectorAll("#additionalBoxes .box");
    const data = [];
    boxes.forEach(box => {
      data.push(box.getAttribute("data-api"));
    });
    localStorage.setItem("plantBoxes", JSON.stringify(data));
    console.log("Saved boxes:", data);
  }

  // ฟังก์ชันโหลดกล่องจาก localStorage
  function loadBoxes() {
    const data = localStorage.getItem("plantBoxes");
    if (!data) return;
    const apiList = JSON.parse(data);
    const boxContainer = document.getElementById("additionalBoxes");
    boxContainer.innerHTML = "";

    apiList.forEach((apiUrl, index) => {
      const count = index + 1;
      const box = document.createElement("div");
      box.classList.add("box", "border", "rounded", "p-3", "mb-3", "bg-light");
      box.setAttribute("data-api", apiUrl);
      box.innerHTML = `
        <h2 class="text-center mt-3">Box ${count}</h2>
        <div class="container-fluid mt-3">
          <div class="row">
            <div class="col text-center">
              <h2 class="temp">-- °C</h2>
              <p>อุณหภูมิในดิน</p>
            </div>
            <div class="col text-center">
              <h2 class="moisture">-- %</h2>
              <p>ความชื้นในดิน</p>
            </div>
            <div class="col text-center">
              <h2 class="datetime">--/--/---- --:--:--</h2>
              <p>วันและเวลาปัจจุบัน</p>
            </div>
          </div>
        </div>
      `;
      boxContainer.appendChild(box);
    });

    updateAllTimes();
  }

  // โหลดกล่องตอนเปิดเพจ
  loadBoxes();

  // เมื่อกดปุ่มเพิ่มกล่อง
  document.getElementById("addBoxBtn").addEventListener("click", () => {
    const apiUrl = prompt("กรุณาใส่ API URL ของกล่องนี้:");
    if (!apiUrl) return alert("ต้องใส่ API URL");

    const boxContainer = document.getElementById("additionalBoxes");
    const count = boxContainer.childElementCount + 1;

    const box = document.createElement("div");
    box.classList.add("box", "border", "rounded", "p-3", "mb-3", "bg-light");
    box.setAttribute("data-api", apiUrl);
    box.innerHTML = `
      <h2 class="text-center mt-3">Box ${count}</h2>
      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col text-center">
            <h2 class="temp">-- °C</h2>
            <p>อุณหภูมิในดิน</p>
          </div>
          <div class="col text-center">
            <h2 class="moisture">-- %</h2>
            <p>ความชื้นในดิน</p>
          </div>
          <div class="col text-center">
            <h2 class="datetime">--/--/---- --:--:--</h2>
            <p>วันและเวลาปัจจุบัน</p>
          </div>
        </div>
      </div>
    `;

    boxContainer.appendChild(box);
    saveBoxes(); // บันทึกกล่องใหม่ลง localStorage
    updateAllBoxes(); // อัปเดตข้อมูลกล่องใหม่ทันที
  });
</script>



</body>
</html>
