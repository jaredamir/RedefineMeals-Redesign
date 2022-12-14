scl = 20
pSpeed = 4
blockSize = 20
canWidth = 600
canHeight = 400
freeSpace = 0.2 //percentage 
worldRandomness = 4 //between 1(very)-6(little)


//world.generateNormal()


function locPosition(){
  let colPos = (floor((mouseX/blockSize))*blockSize)
  let rowPos = (floor((mouseY/blockSize))*blockSize)
  rect(colPos, 0, blockSize, canHeight)
  rect(0, rowPos, canWidth, blockSize)
}

function deleteBlock(mX, mY){
  let colPos = (floor((mX/blockSize)))
  let rowPos = (floor((mY/blockSize)))
  world.bData[rowPos][colPos] = null
}

function deleteColumn(mX){
  let colPos = (floor((mX/blockSize)))
  for(let i = 0; i < world.bData.length; i++){
    world.bData[i][colPos] = null
  }
}
function deleteRow(mY){
  let rowPos = (floor((mY/blockSize)))
  for(let i = 0; i < world.bData[rowPos].length; i++){
    world.bData[rowPos][i] = null
  }
}

//mining
function mouseClicked(){
  deleteBlock(mouseX, mouseY)
}




function setup() {
  createCanvas(canWidth, canHeight);
  player = new Player(20, 40, 10, 10)
  world = new World(canWidth, canHeight)
  world.generatePerlin()
}

function draw() {
  background(220);
  world.show()
  //locPosition()
  player.collision()
  player.spawn()
  // if (keyIsPressed){
     control()
  // }
  player.pLeftCol()
  player.physics()
}

function control(){
  if (keyIsDown(RIGHT_ARROW)){
    player.spX += pSpeed
  }else if (keyIsDown(LEFT_ARROW)){
    player.spX -= pSpeed
  }else if (keyIsDown(UP_ARROW)){
    player.spY -= 5
  }else if (keyIsDown(DOWN_ARROW)){
    if(!player.floorCollision()){player.spY += 5}
  }
}