// Category change class active and hide / show
const showRequiredCategory = (event) => {
  const getId = event.id;
  const links = document.querySelectorAll(".select-category button");
  for (i = 0; i < links.length; i++) {
    if (links[i].hasAttribute("class")) {
      links[i].classList.remove("active");
    }
  }
  event.classList.add("active");
  const getCategory = document.querySelector(`.category-${getId}`);
  const categories = document.querySelectorAll('div[class ^= "category-"]');
  for (i = 0; i < categories.length; i++) {
    if (categories[i].hasAttribute("class")) {
      categories[i].classList.remove("showCategory");
      categories[i].classList.add("hideCategory");
    }
  }
  getCategory.classList.remove("hideCategory");
  getCategory.classList.add("showCategory");
};

$(document).ready(function () {
  init();
});

const init = () => {
  initModal();
};
const initModal = () => {
  const modalsWrapper = $(".modal-wrapper");
  const modalCloseButton = $(".modal-wrapper .modal-close");
  const btnRegister = $('.modal-wrapper [role="btn-register"]');
  const btnLogin = $('.modal-wrapper [role="btn-login"]');
  const btnMdp = $('.modal-wrapper [role="btn-mdp"]');
  const btnBack = $('.modal-wrapper [role="btn-changer"]');
  const btnParent = $('.modal-wrapper [role="btn-parent"]');
  const btnBaby = $('.modal-wrapper [role="btn-baby"]');
  const modalLogin = $(".modal-wrapper .modal-login");
  const modalRegister = $(".modal-wrapper .modal-register");
  const modalMdp = $(".modal-wrapper .modal-lost_password");
  const modalChoose = $(".modal-wrapper #modal-choose");
  const modalParent = $(".modal-wrapper #modal-parent");
  const modalBaby = $(".modal-wrapper #modal-baby");

  modalCloseButton.click((e) => {
    modalsWrapper.toggleClass("active");
    modalLogin.css("display", "none");
    modalMdp.css("display", "none");
    modalParent.css("display", "none");
    modalRegister.css("display", "none");
    modalBaby.css("display", "none");
    modalChoose.css("display", "none");
  });

  $('[role="btn-modal-login"]').click((e) => {
    e.preventDefault();
    modalsWrapper.css("display", "flex").toggleClass("active");
    modalLogin.css("display", "flex");
  });
  $('[role="btn-modal-register"]').click((e) => {
    e.preventDefault();
    modalsWrapper.css("display", "flex").toggleClass("active");
    modalRegister.css("display", "flex");
    modalChoose.css("display", "flex");
    modalLogin.css("display", "none");
  });

  btnRegister.click((e) => {
    e.preventDefault();
    modalLogin.css("display", "none");
    modalRegister.css("display", "flex");
    modalChoose.css("display", "flex");
  });

  btnMdp.click((e) => {
    e.preventDefault();
    modalLogin.css("display", "none");
    modalMdp.css("display", "flex");
  });

  btnLogin.click((e) => {
    e.preventDefault();
    modalLogin.css("display", "flex");
    modalRegister.css("display", "none");
    modalMdp.css("display", "none");
  });

  btnBack.click((e) => {
    e.preventDefault();
    modalChoose.css("display", "flex");
    modalParent.css("display", "none");
    modalBaby.css("display", "none");
  });

  btnParent.click((e) => {
    e.preventDefault();
    modalChoose.css("display", "none");
    modalParent.css("display", "flex");
  });

  btnBaby.click((e) => {
    e.preventDefault();
    modalChoose.css("display", "none");
    modalBaby.css("display", "flex");
  });
};

// content Card home show and hide on click
// card 1
$(".showMore1").click(function () {
  $(".hideContent1").hide();
  $(".showContent1").show();
});
$(".hideMore1").click(function () {
  $(".hideContent1").show();
  $(".showContent1").hide();
});
// card 2
$(".showMore2").click(function () {
  $(".hideContent2").hide();
  $(".showContent2").show();
});
$(".hideMore2").click(function () {
  $(".hideContent2").show();
  $(".showContent2").hide();
});
// card 3
$(".showMore3").click(function () {
  $(".hideContent3").hide();
  $(".showContent3").show();
});
$(".hideMore3").click(function () {
  $(".hideContent3").show();
  $(".showContent3").hide();
});

// menu burger
var menuBtn = document.getElementById("menuBtn");
var sideNav = document.getElementById("sideNav");
var menu = document.getElementById("menu");
// hide sideNav right
sideNav.style.right = "-100%";
// onClick show sideNav
menuBtn.onclick = function () {
  if (sideNav.style.right === "-100%") {
    sideNav.style.right = "0";
    menu.src = "asset/image/close.png";
  } else {
    sideNav.style.right = "-100%";
    menu.src = "asset/image/menu.png";
  }
};

// toggleBtn check 1 / 2 if yes hide else fadeIn (map)
// https://qastack.fr/programming/5016313/how-to-determine-if-a-number-is-odd-in-javascript
$(document).ready(function () {
  x = 0;
  $(".toggle-state").click(function () {
    x++;
    if (x % 2 == 1) {
      $("#map").hide();
      $(".cardSearch").css("width", "100%");
      $(".cardSearch").css("display", "flex");
      $(".cardSearch").css("flex-wrap", "wrap");
      $(".cardSearch").css("justify-content", "space-between");
      $(".proCard").css("width", "49%");
    } else {
      $("#map").fadeIn(500);
      $("#map").css("min-width", "50%");
      // $(".cardSearch").css("width", "100%");
      $(".proCard").css("width", "99%");
    }
  });
});

// $(window).resize(function () {
//   var windowwidth = $(window).width();

//   if (windowwidth < "400") {
//     $(".cardSearch").css("display", "flex");
//     $(".cardSearch").css("flex-wrap", "nowrap");
//     $(".cardSearch").css("flex-direction", "column");
//     $(".proCard").css("min-width", "100%");
//     //  alert('see it works');
//   } else if (windowwidth > "400") {
//     $("#map").fadeIn(500);
//     $("#map").css("min-width", "50%");
//     $(".cardSearch").css("width", "100%");
//     $(".proCard").css("width", "99%");
//   }
// });

// Calendar datePicker from jQuery UI
// https://stackoverflow.com/questions/55448166/data-range-picker-to-select-start-and-end-dates
$(function () {
  $("#fromDate").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,

    onClose: function (selectedDate) {
      $("#toDate").datepicker("option", "minDate", selectedDate);
    },
  });
  $("#toDate").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    onClose: function (selectedDate) {
      $("#fromDate").datepicker("option", "maxDate", selectedDate);
    },
  });
});
// set calendar in french
// https://github.com/jquery/jquery-ui/blob/main/ui/i18n/datepicker-fr.js
(function (factory) {
  if (typeof define === "function" && define.amd) {
    // AMD. Register as an anonymous module.
    define(["../widgets/datepicker"], factory);
  } else {
    // Browser globals
    factory(jQuery.datepicker);
  }
})(function (datepicker) {
  datepicker.regional.fr = {
    closeText: "Fermer",
    prevText: "Précédent",
    nextText: "Suivant",
    currentText: "Aujourd'hui",
    monthNames: [
      "janvier",
      "février",
      "mars",
      "avril",
      "mai",
      "juin",
      "juillet",
      "août",
      "septembre",
      "octobre",
      "novembre",
      "décembre",
    ],
    monthNamesShort: [
      "janv.",
      "févr.",
      "mars",
      "avr.",
      "mai",
      "juin",
      "juil.",
      "août",
      "sept.",
      "oct.",
      "nov.",
      "déc.",
    ],
    dayNames: [
      "dimanche",
      "lundi",
      "mardi",
      "mercredi",
      "jeudi",
      "vendredi",
      "samedi",
    ],
    dayNamesShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
    dayNamesMin: ["D", "L", "M", "M", "J", "V", "S"],
    weekHeader: "Sem.",
    dateFormat: "dd/mm/yy",
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: "",
  };
  datepicker.setDefaults(datepicker.regional.fr);

  return datepicker.regional.fr;
});

// $(function () {
//   $(".dialog").dialog({
//     autoOpen: false,
//     show: {
//       effect: "blind",
//       duration: 1000,
//     },
//     hide: {
//       effect: "explode",
//       duration: 1000,
//     },
//   });

//   $(".opener").on("click", function () {
//     $(".dialog").dialog("open");
//   });
// });



var modal = document.getElementById("window");
var btn = document.getElementById("download");
var span = document.getElementsByClassName("facture-close")[0];

btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


window.onload = function () {
  document.getElementById("download")
    .addEventListener("click", () => {
      const facture = this.document.getElementById("facture");
      console.log(facture);
      console.log(window);
      var opt = {
        margin: 1,
        filename: 'myfile.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      html2pdf().from(facture).set(opt).save();
    })
}