function actualizarCampos() {
    const tipo = document.getElementsByName('tipo')[0].value;
    const lado1 = document.getElementsByName('lado_1')[0];
    const lado2 = document.getElementsByName('lado_2')[0];
    const lado3 = document.getElementsByName('lado_3')[0];

    switch (tipo) {
        case 'cuadrado':
            lado1.disabled = false;
            lado2.disabled = true;
            lado3.disabled = true;
            break;
        case 'rectangulo':
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = true;
            break;
        case 'triangulo':
            lado1.disabled = false;
            lado2.disabled = false;
            lado3.disabled = false;
            break;
        default:
            lado1.disabled = true;
            lado2.disabled = true;
            lado3.disabled = true;
            break;
    }
}