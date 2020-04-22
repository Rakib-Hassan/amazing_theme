const heart_header = $('.heart_header')

const liked = true


if(liked) {
	heart_header.innerHTML(`<img src="${post_info[0]}/image/red_heart.png" class="pp_like" alt="">`)
} else {
	heart_header.innerHTML(`<img src="${post_info[0]}/image/red_heart_khali.png" class="pp_like" alt="">`)
}