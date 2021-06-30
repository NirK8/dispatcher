const onSearchButtonClicked = (e) => {
  console.log('value: ', searchInput.value);
};
const searchInput = document.getElementById('search');
const searchIcon = document.getElementById('search-icon');
searchIcon.addEventListener('click', onSearchButtonClicked);



const cutText = (text, limit) => {
  if (text.length > limit) {
    for (let i = limit; i > 0; i--) {
      if (
        text.charAt(i) === " " &&
        (text.charAt(i - 1) !== "," ||
          text.charAt(i - 1) != "." ||
          text.charAt(i - 1) !== ";")
      ) {
        return text.substring(0, i) + "...";
      }
    }
    return text.substring(0, limit) + "...";
  } else return text;
};