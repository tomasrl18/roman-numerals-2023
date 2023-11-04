const renameMe = () => {
    
};

function nextStep(board) {
    const newBoard = board.flat();
    let neighbours = 1;

    for (let i = 0; i < newBoard.length; i++) {    
        if (newBoard[i] === 1) {
            neighbours++;
        }
    }
    
    if (neighbours === 1 || neighbours === 2) {
        return [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0],
        ];
    }
}

module.exports = {nextStep};
