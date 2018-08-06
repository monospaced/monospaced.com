import React from "react";
import { storiesOf } from "@storybook/react";
import { text } from "@storybook/addon-knobs";

import Paragraph from "./Paragraph";

storiesOf("Components/Markdown/Paragraph", module).add("Component", () => (
  <Paragraph>
    {text(
      "text",
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
    )}
  </Paragraph>
));
