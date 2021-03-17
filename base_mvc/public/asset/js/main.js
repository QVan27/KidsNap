$(document).ready(function () {
    init();
});

const init = () => {
    initModal();
}
const initModal = () => {
    const modalsWrapper = $('.modal-wrapper');
    const modalCloseButton = $('.modal-wrapper .modal-close');
    const btnRegister = $('.modal-wrapper [role="btn-register"]');
    const btnLogin = $('.modal-wrapper [role="btn-login"]');
    const btnMdp = $('.modal-wrapper [role="btn-mdp"]');
    const btnBack = $('.modal-wrapper [role="btn-changer"]');
    const btnParent = $('.modal-wrapper [role="btn-parent"]');
    const btnBaby = $('.modal-wrapper [role="btn-baby"]');
    const modalLogin = $('.modal-wrapper .modal-login');
    const modalRegister = $('.modal-wrapper .modal-register');
    const modalMdp = $('.modal-wrapper .modal-lost_password');
    const modalChoose = $('.modal-wrapper #modal-choose');
    const modalParent = $('.modal-wrapper #modal-parent');
    const modalBaby = $('.modal-wrapper #modal-baby');

    modalCloseButton.click((e) => {
        modalsWrapper.toggleClass('active');
    })

    modalsWrapper.click((e) => {
        if (e.target == document.querySelector('.modal-wrapper')) {
            modalsWrapper.toggleClass('active');
        }
    })

    $('[role="btn-modal-login"]').click((e) => {
        e.preventDefault();
        // navResponsive.classList.remove('active');
        modalsWrapper.css('display', 'flex').toggleClass('active');
    });

    btnRegister.click((e) => {
        e.preventDefault();
        modalLogin.css('display', 'none');
        modalRegister.css('display', 'flex');
    });
    
    btnMdp.click((e) => {
        e.preventDefault();
        modalLogin.css('display', 'none');
        modalMdp.css('display', 'flex');
    });

    btnLogin.click((e) => {
        e.preventDefault();
        modalLogin.css('display', 'flex');
        modalRegister.css('display', 'none');
        modalMdp.css('display', 'none');
    });

    btnBack.click((e) => {
        e.preventDefault();
        modalChoose.css('display', 'flex');
        modalParent.css('display', 'none');
        modalBaby.css('display', 'none');
    });

    btnParent.click((e) => {
        e.preventDefault();
        modalChoose.css('display', 'none');
        modalParent.css('display', 'flex');
    });

    btnBaby.click((e) => {
        e.preventDefault();
        modalChoose.css('display', 'none');
        modalBaby.css('display', 'flex');
    });

}


