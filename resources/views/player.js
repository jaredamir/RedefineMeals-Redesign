class Player{
  constructor(pWidth, pHeight, spX, spY){
    this.spX = spX
    this.spY = spY
    this.pWidth = pWidth
    this.pHeight = pHeight
  }
  update(){
    
  }
  spawn(){
    fill(0)
    rect(this.spX, this.spY, this.pWidth, this.pHeight)
  }
  
  floorCol(){
    let pOrigin_yPos = (this.spY/blockSize) 
    let pOrigin_row = floor(pOrigin_yPos)*blockSize + this.pHeight
    let floorIndex =  floor(pOrigin_yPos)+(this.pHeight/blockSize)
    let r_bool = false
    
    let pOrigin_xPos = (this.spX/blockSize)
    let pOrigin_col = floor(pOrigin_xPos)
    if(this.spY + this.pHeight < canHeight && this.spY >= 0){
      if(world.bData[floorIndex][pOrigin_col] != null){
        r_bool = true
      }
      if(pOrigin_xPos-(floor(pOrigin_xPos)) != 0 && floorIndex != world.bData[floorIndex].length){
        if(world.bData[floorIndex][pOrigin_col+(floor(this.pWidth/blockSize))] != null){
          r_bool = true
        }
      }
    }
    return r_bool
  }

  
  pLeftCol(){
    let pTopPosRow = floor(this.spY/blockSize)
    let pBottomPosRow = floor((this.spY+this.pHeight)/blockSize)-1
    
    
    
  }
  
  collision(){
    return(this.floorCol())
  
  }
  physics(){
      if(!this.floorCol()){this.spY += 2}
  }
}