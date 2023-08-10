
function checkInputs() {
    const textInputs = document.querySelectorAll('input[type="text"]');
    const radioInputs = document.querySelectorAll('input[type="radio"]');
    let isEmpty = false;

    // Text inputs
    textInputs.forEach(input => {
      if (input.value.trim() === '') {
        isEmpty = true;
      }
    });

    // Radio inputs
    radioInputs.forEach(input => {
      const name = input.getAttribute('name');
      const checkedRadios = document.querySelectorAll(`input[type="radio"][name="${name}"]:checked`);
      
      if (checkedRadios.length === 0) {
        isEmpty = true;
      }
    });

    // Alert if any input is empty
    if (isEmpty) {
      alert('Lütfen tüm alanları doldurun.');
    }
}//

  // Gönder butonunu alıp checkInputs fonksiyonunu onun tıklama olayına bağlıyoruz.
document.getElementById('submitBtn').addEventListener('click', checkInputs);

function toggleNoInput() {
  var telRadios = document.getElementsByName("tel");
  var noInput = document.getElementById("no");

  if (telRadios[0].checked) {
      noInput.disabled = true;
      noInput.value = ""; // Alanı boşaltın, böylece veri gönderilmez
  } else {
      noInput.disabled = false;
  }
}

// Sayfa yüklendiğinde mevcut duruma göre noInput'u kontrol edelim
document.addEventListener("DOMContentLoaded", function() {
  toggleNoInput();
});

function toggleKullaniciInput() {
  var etkiRadios = document.getElementsByName("etki");
  var no1Input = document.getElementById("no1");

  if (etkiRadios[0].checked) {
      no1Input.disabled = true;
      no1Input.value = ""; // Alanı boşaltın, böylece veri gönderilmez
  } else {
      no1Input.disabled = false;
  }
}

// Sayfa yüklendiğinde mevcut duruma göre noInput'u kontrol edelim
document.addEventListener("DOMContentLoaded", function() {
  toggleKullaniciInput();
});

function toggleIcEpostaInput() {
  var secenekRadios = document.getElementsByName("secenek4");
  var gorev1Input = document.getElementById("görev1Input");

  if (secenekRadios[0].checked) {
      gorev1Input.disabled = true;
      gorev1Input.value = ""; // Alanı boşaltın, böylece veri gönderilmez
  } else {
      gorev1Input.disabled = false;
  }
}

// Sayfa yüklendiğinde mevcut duruma göre noInput'u kontrol edelim
document.addEventListener("DOMContentLoaded", function() {
  toggleIcEpostaInput();
});

function toggleDisEpostaInput() {
  var secenek2Radios = document.getElementsByName("secenek5");
  var gorev2Input = document.getElementById("görev2Input");

  if (secenek2Radios[0].checked) {
      gorev2Input.disabled = true;
      gorev2Input.value = ""; // Alanı boşaltın, böylece veri gönderilmez
  } else {
      gorev2Input.disabled = false;
  }
}

// Sayfa yüklendiğinde mevcut duruma göre noInput'u kontrol edelim
document.addEventListener("DOMContentLoaded", function() {
  toggleDisEpostaInput();
});

function validateTC(event) {
  var input = event.target;
  var value = input.value;
  var regex = /^\d*$/; // Sadece sayıları kabul eden bir regex (dijital karakterler için)

  if (!regex.test(value)) {
    document.getElementById("errorMessage").textContent = "Sadece sayı girebilirsiniz.";
    input.value = value.replace(/[^\d]/g, ""); // Sadece sayıları bırak, diğer karakterleri kaldır
  } else {
    document.getElementById("errorMessage").textContent = "";
  }
};

function validateSicil(event) {
  var input = event.target;
  var value = input.value;
  var regex = /^\d*$/; // Sadece sayıları kabul eden bir regex (dijital karakterler için)

  if (!regex.test(value)) {
    document.getElementById("errorMessage2").textContent = "Sadece sayı girebilirsiniz.";
    input.value = value.replace(/[^\d]/g, ""); // Sadece sayıları bırak, diğer karakterleri kaldır
  } else {
    document.getElementById("errorMessage2").textContent = "";
  }
};