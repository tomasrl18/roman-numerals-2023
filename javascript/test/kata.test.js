const { nextStep } = require('../src/kata');

describe("Game of live", function () {
  it("crhecck is alive", function () {
    const board = [
      [0, 0, 0],
      [0, 1, 0],
      [0, 0, 0],
    ];

    const isAlive = board[1][1] == 1

    expect(isAlive).toEqual(true);
  });

  it("dies if the cell has not neighbour", function () {
    const board = [
      [0, 0, 0],
      [0, 1, 0],
      [0, 0, 0],
    ];

    let newBoard = nextStep(board);

    const expectedBoard = [
      [0, 0, 0],
      [0, 0, 0],
      [0, 0, 0],
    ];

    expect(newBoard).toEqual(expectedBoard);
  });
});
