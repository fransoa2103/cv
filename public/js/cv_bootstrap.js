// when a user chooses to print this document,
// I remove the text-light class from Bootstrap
// and I move the tag named "address" before the tag named "name"

classTextLight = document.querySelectorAll(".text-light");
tagAddress = document.querySelector('address');
sectionLeft = document.querySelector('section.left');
console.log(sectionLeft);
window.addEventListener("beforeprint", () => {
    classTextLight.forEach(ctl => {
        console.log(ctl);
        ctl.classList.remove("text-light");
        sectionLeft.prepend(tagAddress);
    });
  });