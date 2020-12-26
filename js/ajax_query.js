let like = document.getElementsByClassName('like_button');

for (let i = 0; i < like.length; i++) {
    let id = like[i].getAttribute('data-id');

    if (localStorage.getItem(`is_liked[${i}]`) === 'liked') {
        like[i].innerHTML = '<i class="fas fa-heart"></i>';
        like[i].classList.add(localStorage.getItem(`is_liked[${i}]`));
        like[i].classList.remove('like');
        like[i].dataset.status = localStorage.getItem(`is_liked[${i}]`);
    }

    like[i].onclick = () => {
        if (like[i].dataset.status === 'like') {
            localStorage.setItem(`is_liked[${i}]`, 'liked');
            like[i].classList.add(localStorage.getItem(`is_liked[${i}]`));
            $.post('../models/like.php', { article_id: id });
            like[i].innerHTML = '<i class="fas fa-heart"></i>';
            like[i].classList.remove('like');
            like[i].dataset.status = localStorage.getItem(`is_liked[${i}]`);
        } else {
            localStorage.setItem(`is_liked[${i}]`, 'like');
            like[i].classList.add(localStorage.getItem(`is_liked[${i}]`));
            $.post('../models/unlike.php', { article_id: id });
            like[i].innerHTML = '<i class="far fa-heart"></i>';
            like[i].classList.remove('liked');
            like[i].dataset.status = localStorage.getItem(`is_liked[${i}]`);
        }
    }
}