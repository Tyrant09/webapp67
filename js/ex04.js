const random_hex_color_code = () => {
    let n = (Math.random() * 0xfffff * 1000000).toString(16);
    return '#' + n.slice(0,6);
} 

const randomcolor = random_hex_color_code();

document.body.style.backgroundColor = randomcolor;
document.write(random_hex_color_code());
document.style.borderBlockColor = randomcolor;
