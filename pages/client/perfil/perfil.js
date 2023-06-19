imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        imgp.src = URL.createObjectURL(file)
    }
  }