<?php /* Template Name: News Page */

get_header();

?>
<div class="news"></div>

<script>
    const url = 'https://newsapi.org/v2/top-headlines?country=br&apiKey=c6595ed7516847f4a77b8fc01f2f9e6f'
    const postsContainer = document.querySelector('.news')

    fetch(url)
    .then(response => response.json())
    .then(data => {
        data.map( post => {
        const innerContent =
       `
       <li>
       <h2>${post.article.title}</h2>
       <p>${post.article.description}</p>
       </li>
       `
    })
});

</script>