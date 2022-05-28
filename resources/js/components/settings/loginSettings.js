import {
  TInput,
  TTextarea,
  TSelect,
  TRadio,
  TCheckbox,
  TButton,
  TInputGroup,
  TCard,
  TAlert,
  TModal,
  TDropdown,
  TRichSelect,
  TPagination,
  TTag,
  TRadioGroup,
  TCheckboxGroup,
  TTable,
  TDatepicker,
  TToggle,
  TDialog,
} from 'vue-tailwind/dist/components';
export default {
  fields: [
    {
      'email-input': {
        component: TInput,
        props: {
          classes:
            'px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full text-xs font-bold',
          type: 'email',
          name: 'email',
          id: 'email',
        },
      },
      'password-input': {
        component: TInput,
        props: {
          classes:
            'px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full text-xs font-bold',
          type: 'password',
          name: 'password',
          id: 'password',
        },
      },
      't-checkbox': {
        component: TCheckbox,
        props: {
          classes:
            'form-checkbox text-gray-800 ml-1 w-5 h-5 appearance-none focus:outline-none',
          type: 'checkbox',
        },
      },
      't-button': {
        component: TButton,
        props: {
          classes:
            'bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full',
          type: 'submit',
          name: 'submit',
        },
      },
    },
  ],
};
