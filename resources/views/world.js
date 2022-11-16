class World{
  constructor(canWidth, canHeight){
    this.rows = canHeight/blockSize
    this.cols = canWidth/blockSize
    this.bData = []//matrix
    
    /*
      [
      [0,20,40,60,80,100],
      [0,20,40,60,80,100],
      [0,20,40,60,80,100],
      [0,20,40,60,80,100],
      [0,20,40,60,80,100],
      [0,20,40,60,80,100],
      ]
      */
    
  }
  generateNormal(){
    //row by row
    //outer loop = row (i) 
    //inner loop = col (fill up [], append to data in outer loop), add block (j)
    for(let i = 0; i < canHeight/blockSize; i++){
      let rowData = []
      for(let j = 0; j < canWidth; j+=blockSize){
        if(i >= ((canHeight/blockSize)*freeSpace)){
           rowData.push(j)
      }else{
        rowData.push(null)
      }
        //x and y should be only top left corner because that point can just be x + block size (check is (if datax < player.x < datax + blockSize))
      }
      this.bData.push(rowData)
    }
    
  }
  
  generatePerlin(){
    /*perlin noise function
nested loop (outter loop is row (reset y offset)) (inner loop is col, reset(x offset))
*/
    let yoff = 0
    let inc = .1
    for (let y = 0; y < canHeight/blockSize; y++){
      let rowData = []
      let xoff = 0 //for every row rest xoff back to 0
      for (let x = 0; x < canWidth; x+=blockSize){
        let r = noise(xoff, yoff)*10
        if(r >= worldRandomness && y >= ((canHeight/blockSize)*freeSpace)){
          rowData.push(x)
        }else{
          rowData.push(null)
        }
        xoff += inc
      }
      yoff += inc
      this.bData.push(rowData)
    }
  }
  

    show(){
      let y = 0
      for(let i = 0; i < this.bData.length; i++){
        for(let j = 0; j < this.bData[i].length; j++){
          if (this.bData[i][j]!=null){
            fill(50)
            square(this.bData[i][j], y, blockSize)
          }else {
            continue
          }
        }
        y+=blockSize
      }
    }

}