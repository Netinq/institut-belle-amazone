function display(elem, origin)
{
  document.getElementById(elem).classList.remove("hidden");
  document.getElementById(elem).classList.add("visible");
  document.getElementById(origin).classList.remove("visible");
  document.getElementById(origin).classList.add("hidden");
}