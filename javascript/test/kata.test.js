const { renameMe } = require('../src/kata');

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
});
