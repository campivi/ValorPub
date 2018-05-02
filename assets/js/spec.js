
/*

toBeFalsy: Checks to see if the actual value coerces to false
toContain: Checks to see if an array contains the expected value
toBeLessThan:  Self-explanatory
toBeGreaterThan: Self-explanatory
toBeCloseTo: For precision math comparisons on floating point numbers
toThrow: Checks to see if an error is thrown
toHaveBeenCalled:  Checks to see if the spy was called
toHaveBeenCalledWith:  Checks to see if the spy was called with the expected parameters

*/





var Init = (function () {

  var methods = {};

  methods.ready = function () {
    methods.uno();
  };


  methods.uno = function () {
  };


 return {
      methods : methods
  }

})();



$(document).ready(Init.methods.ready);





describe("Revisión de código", function() {
  it("Verificando si método uno existe", function() {
    expect(Init.methods.uno).toBeDefined();
  });
});


