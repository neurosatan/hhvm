<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

function foo() {
  return Pair {varray[123], varray[456]};
}
var_dump(foo());
