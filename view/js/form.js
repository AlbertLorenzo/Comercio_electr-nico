const changeSelected = (d) => {
  const productStack = d.querySelectorAll(".product");
  for (const product of productStack) {
    product.addEventListener("click", function () {
      d.forms["products-form"]["comic-select"].value = this["id"];
    });
  }
};

const handleSubmit = (d) => {
  d.forms["products-form"].addEventListener("submit", function (e) {
    e.preventDefault();
    const selectedItem = d.getElementById(this["comic-select"].value);
    let data = {
      title: selectedItem.children[0].innerText,
      name: selectedItem.children[1].innerText,
      price: selectedItem.children[2].innerText.slice(0, -1),
    };
    data = JSON.stringify(data);
    data = btoa(unescape(encodeURIComponent(data)));
    this["product-data"].value = data;
    this.submit();
  });
};

document.addEventListener("DOMContentLoaded", function () {
  changeSelected(this);
  handleSubmit(this);
});
