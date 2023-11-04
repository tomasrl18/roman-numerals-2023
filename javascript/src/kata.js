const renameMe = () => {
    
};

function nextStep(board) {
    const newBoard = board.flat();
    let neighbours = 0;

    for (let i = 0; i < newBoard.length; i++) {    
        if (newBoard[i] === 1) {
            neighbours++;
        }
    }
    
    if (neighbours === 1) {
        return [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0],
        ];
    }
}

module.exports = {nextStep};
