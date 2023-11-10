  function caesarCipher(text, shift) {
    let alphabet = "abcdefghijklmnopqrstuvwxyz";
  
    let result = "";
  
    for (let i = 0; i < text.length; i++) {
      if (text[i] === " ") {
          result = result + " "
      } else {
          let char = text[i]
          let indexChar = alphabet.indexOf(char)
          result = result + alphabet[(indexChar+shift) % alphabet.length]
      }
    }
  
    return result;
  }
  let plaintext = prompt("Kata : ").toLocaleLowerCase();

  // let plaintext = "indonesia selalu di depan";
  let shift = 13;

  let ciphertext = caesarCipher(plaintext.toLowerCase(), shift);
  console.log(`Plaintext: ${plaintext}`);
  console.log(`Ciphertext (Shift ${shift}): ${ciphertext}`);
